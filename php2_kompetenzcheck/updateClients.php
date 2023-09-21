<?php
include_once './components/headerAfterLogin.php';
require_once './db/db_connect.php';



if (isset($_GET['comp'])) {
    $company_id = $_GET['comp'];

    $stmt = $pdo->prepare("SELECT * FROM clients WHERE company_id = ?");
    $stmt->execute([$company_id]);
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($clientData) {
        $company_name = $clientData['company_name'];
        $contact_person = $clientData['contact_person'];
        $phone = $clientData['phone'];
        $adress = $clientData['adress'];
        $created_by = $clientData['created_by'];
        $created_at = $clientData['created_at'];
        $edited_at = $clientData['edited_at'];
    }
}
?>


<form action="./updateClientsCheck.php" method="post">

    <div class="m-10 h-full bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="font-sans text-2xl font-semibold text-blue-800">Update Clients</h1>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <input type="hidden" name="company_id" value="<?= $clientData['company_id'] ?>">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="font-sans relative">
                                <label for="company_name" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Company Name</label>
                                <input autocomplete="off" id="company_name" name="company_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $company_name ?>">

                            </div>
                            <div class="font-sans relative">
                                <label for="contact_person" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Contact Person</label>
                                <input autocomplete="off" id="contact_person" name="contact_person" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $contact_person ?>">

                            </div>
                            <div class="font-sans relative">
                                <label for="phone" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Phone</label>
                                <input autocomplete="off" id="phone" name="phone" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $phone ?>">

                            </div>
                            <div class="font-sans relative">
                                <label for="adress" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Adress</label>
                                <input autocomplete="off" id="adress" name="adress" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $adress ?>">

                            </div>
                            <div class="font-sans relative">
                                <label for="created_by" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Created by</label>
                                <input autocomplete="off" id="created_by" name="created_by" type="text" required class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $created_by ?>">

                            </div>
                            <div class="font-sans relative ">
                                <label for="created_at" class=" mt-5 mb-5 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Created at</label>
                                <input autocomplete="off" id="created_at" name="created_at" type="date" class=" mt-5 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $created_at ?>">

                            </div>
                            <div class="font-sans relative">
                                <label for="edited_at" class=" mt-5 mb-5 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Edited at</label>
                                <input autocomplete="off" id="edited_at" name="edited_at" type="date" required class="mt-5 peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" value="<?= $edited_at ?>">

                            </div>
                            <div class="font-sans relative">
                                <button class="bg-blue-800 text-white rounded-md px-2 py-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>














<?php
include_once './components/footer.php';
?>