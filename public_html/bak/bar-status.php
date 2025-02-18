<?php
header('Content-Type: application/json');

// Function to check if a Docker container is running
function isContainerRunning($containerName) {
    $password = 'Ndkadmin9!';  // Use your password for sudo here
    $command = "echo '$password' | sudo -S docker ps --filter 'name=$containerName' --filter 'status=running' --format '{{.Names}}'";
    $output = shell_exec($command);
        return strpos($output, $containerName) !== false;
}

// Check if the 'php' container is running
$isOpen = isContainerRunning('php');

// Return the JSON response
echo json_encode(['isOpen' => $isOpen]);
?>