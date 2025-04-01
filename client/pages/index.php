<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include '../partials/head.php';
    ?>
</head>
<body>
    <?php include '../partials/header.php'; ?>
    <main>
        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <input type="text" id="myInput" placeholder="ToDo..">
            <span onclick="newElement()" class="addBtn">Přidat</span>
        </div>
        <ul id="myUL" >
            <li>Jit do gymu</li>
            <li>Učit se</li>
            <li>Uklidit</li>
            <li class="checked">Pracovat</li>
        </ul>

    </main>
</body>
<footer>
    <script src="../js/script.js"></script>
        <?php
            include '../partials/head.php';
        ?>
</footer>
</html>