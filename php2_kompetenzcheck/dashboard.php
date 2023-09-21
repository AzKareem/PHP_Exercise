<?php
include_once './components/headerAfterLogin.php';


if (isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];
} else {

    header("location: index.php");
    exit;
}
?>



<div class="m-10 h-full bg-white py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="font-sans mt-5  max-w-screen-md mx-auto p-8 ">
                <h1 class="font-sans mb-6 block text-2xl text-blue-800">Hello, dear <?php echo $user_name; ?></h1>
                <p class="font-sans block  text-base font-normal">We're thrilled to have you as a part of our online community.
                    Explore our website to discover a wide range of exciting features and content.
                    If you have any questions or need assistance, feel free to <a href="contact.php">contact us</a>
                    Enjoy your stay and have a wonderful day!</p>
            </div>
        </div>
    </div>
</div>


<?php
include_once './components/footer.php';
?>