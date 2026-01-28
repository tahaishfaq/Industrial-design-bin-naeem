<?php
/**
 * Output DOCTYPE through header. Set $title, $description, $canonical, $currentPage before including.
 */
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
<?php include __DIR__ . '/head.php'; ?>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans transition-colors duration-300">
<?php include __DIR__ . '/scripts.php'; ?>
<?php include __DIR__ . '/header.php'; ?>
