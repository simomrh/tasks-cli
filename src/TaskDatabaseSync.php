<?php

namespace TaskCli;

class TaskDatabaseSync
{
    private \mysqli $conn;

    public function __construct()
    {
        $this->conn = new \mysqli("localhost", "root", "", "tasks");

        if ($this->conn->connect_error) {
            die("❌ DB Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insert(array $task): void
    {
        $stmt = $this->conn->prepare("
            INSERT INTO tasks (id, description, status, createdAt, updatedAt) 
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->bind_param(
            "issss",
            $task["id"],
            $task["description"],
            $task["status"],
            $task["created_at"],
            $task["updated_at"]
        );

        if ($stmt->execute()) {
            echo "🗄️  Task also saved to MySQL.\n";
        } else {
            echo "❌ Failed to insert into DB: " . $stmt->error . "\n";
        }

        $stmt->close();
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
