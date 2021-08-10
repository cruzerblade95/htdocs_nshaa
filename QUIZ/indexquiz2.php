<!DOCTYPE html>
<html lang="en">
<?php
require '../connect.php';

if(isset($_POST['Score'])){
    $User = $_POST['User'];
    $Score = $_POST['Score'];
    $quizNo = $_POST['quizNo'];
    
    $sql = "INSERT INTO quiz(username, score, quizNo) VALUES ('$User', '$Score', '$quizNo')";
    $result = mysqli_query($con, $sql);
    
    if(!$result)
    {
        echo mysqli_error($conn);
        die();
    }
    else
    {
        echo "Query succesfully executed!";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ 2</title>
    <link rel="stylesheet" href="stylequiz.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>MULA QUIZ 2</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>PERINGATAN MESRA UNTUK ANDA</span></div>
        <div class="info-list">
            <div class="info">1. Anda mempunyai masa <span>60 SAAT</span> untuk setiap soalan.</div>
            <div class="info">2. Setelah pilih jawapan, ia tidak boleh ditukar lagi.</div>
            <div class="info">3. Setelah masa tamat, tidak boleh pilih mana-mana jawapan.</div>
            <div class="info">4. Tidak boleh keluar Quiz ini selagi tidak tamat.</div>
            <div class="info">5. PENTING!! Wajib tonton Video Rasmi Raudhatus Syakirin di Youtube RSG Studio sebelum mula.</div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar</button>
            <button class="restart">Teruskan</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">	RSG QUIZ: QUIZ 2</div>
            <div class="timer">
                <div class="time_left_txt">Baki Masa</div>
                <div class="timer_sec">60</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Seterusnya</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">TAHNIAH! Anda berjaya menjawab Quiz 2~</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Keluar Quiz</button>
        </div>
    </div>

    <input type="hidden" id="userSession" name="userSession" value="<?php echo($_SESSION["username"]); ?>">

    <?php
	require '../includes/js_include.php';
    ?>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions2.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script2.js"></script>

</body>
</html>