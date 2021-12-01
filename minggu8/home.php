<?php 
session_start();
if (!isset($_SESSION['userID'])) {
    header('Location:index.php');
    die();
}

require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css"/>
    <title>Home</title>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <div class="h1">
    <h1 align="center">Selamat Datang di Website</h1>
    </div>

    <div class="h3">
    <h3 align="center">Hai, <?php echo $_SESSION['nama']; ?></h3>
    </div>
    
    <section class="base">

        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
        
            <h2>History</h2>
            <div>
                <p>
                Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum
                </p>
            </div>

            <form action="index.php" align="center">
                <button type="submit" name="" class="login-btn-submit">logout</button>
            </form>
        </aside>
    </section>

    <script src="./assets/iklan/iklan.js"></script>
</body>



</html>