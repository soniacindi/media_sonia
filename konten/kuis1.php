<!DOCTYPE html>
<html>
<head>
  <title>Quiz Learning Database</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="/media_sonia-main/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/media_sonia-main/css/main.css">
  <link rel="icon" href="/media_sonia-main/image/logo.png">
  <script type="text/javascript" src="/media_sonia-main/bootstrap/js/bootstrap.bundle.min.js" ></script>
</head>
<body onload="NextQuestion(0)">
<?php
include('../header.php');
?>
<div class="col-lg-10 col-md-11">
    
  <div class="kotak-kuis">
    <div class="row">
      <div class="col-lg-1 col-md-0">
      </div>
      <div class="col-lg-10 col-md-12">
      <div class="isi"> 
        <br>
        <h1>QUIZ</h1>
        <h2>Uji Kompetensi Basis Data</h2>
        <main class="bgkuis">
          <!-- creating a modal for when quiz ends -->
          <div class="modal-container" id="score-modal">
            <div class="modal-content-container">
            <h1>Selamat quiz telah terselesaikan.</h1>
              <div class="grade-details">
                <p>Jumlah soal : 10</p>
                <p>Jawaban Salah : <span id="wrong-answers"></span></p>
                <p>Jawaban Benar : <span id="right-answers"></span></p>
                <p>Grade : <span id="grade-percentage"></span>%</p>
                <p><span id="remarks"></span></p>
              </div>
              <div class="modal-button-container">
                <button onclick="closeScoreModal()">Continue</button>
              </div>
            </div>
          </div>
          <div class="game-quiz-container">
            <div class="game-details-container">
              <h1>Skor : <span id="player-score"></span> / 10</h1>
              <h1>Pertanyaan : <span id="question-number"></span> / 10</h1>
            </div>
            <div class="game-question-container">
              <h1 id="display-question"></h1>
            </div>
            <div class="game-options-container">
              <div class="modal-container" id="option-modal">
                <div class="modal-content-container">
                  <h1>Pilih salah satu jawaban</h1>
                    <div class="modal-button-container">
                      <button onclick="closeOptionModal()">Selanjutnya</button>
                    </div>
                  </div>
                </div>
                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>
                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>
                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>
                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>
            </div>
            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Selanjutnya >> </button>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="col-lg-1 col-md-0">
    </div>
  </div>
  </div>
</div>
  

    <!-- FOOTER -->
    <div class="row footer">
      <div class="col-lg-4 col-md-12">
        <img src="/media_sonia-main/image/logo1.png" style="display:block; margin:auto;" >
        <div class="footer-nama">Learning Database</div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="judul-footer">
              Follow Me
            </div>
            <div class="isi-footer">
              <a href="https://www.instagram.com/soniacindii/" target="blank">
                <img src="/media_sonia-main/image/instagram.png" alt="instagram logo" width="60" border=0>
              </a>
            </div>
            <div class="isi-footer">
              <a href="https://twitter.com/soniacindip" target="blank">
                <img src="/media_sonia-main/image/twitter.png" alt="twitter logo" width="65" border=0>
              </a>
            </div>
            <div class="isi-footer">
              <a href="https://www.linkedin.com/in/sonia-cindi-06b6061a9/" target="blank">
                <img src="/media_sonia-main/image/linkedin.png" alt="linkedin logo" width="55" border=0>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="judul-footer">
              Other Course
            </div>
            <div class="isi-footer">
              Learning Java
            </div>
            <div class="isi-footer">
              Learning Python
            </div>
            <div class="isi-footer">
              Learning C++
            </div>
            <div class="isi-footer">
              Learning HTML
            </div>
            <div class="isi-footer">
              Learning Aritificial Intellegent
            </div>
            <div class="isi-footer">
              Learning Information Retrieval 
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="judul-footer">
              Contact
            </div>
            <div class="isi-footer">
              <a href="https://wa.me/+6281244287159" target="blank">
                <img src="/media_sonia-main/image/wa.png" alt="whatsapp logo" width="50" border=0>
              </a>
            </div>
            <div class="isi-footer">
            </div>
            <div class="isi-footer">
              <a href="mailto:soniacindi@gmail.com" target="blank">
                <img src="/media_sonia-main/image/gmail.png" alt="gmail logo" width="55" border=0>
              </a>
            </div>
            <div class="isi-footer">
              Jl. Gading no.58 Kab Pasuruan, Pasuruan, Jawa Timur
              <img src="/media_sonia-main/image/lokasi.png" alt="lokasi logo" width="55" border=0>          
            </div>
            <div class="isi-footer">
              Jl. PTT III no.10 Surabaya, Jawa Timur
              <img src="/media_sonia-main/image/lokasi.png" alt="lokasi logo" width="55" border=0>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        &copy; 2022 All Rights Reserved. Sonia Cindi Permatasari
      </div>
    </div>
    <script src="/media_sonia-main/bootstrap/js/kuis1.js"></script>
</body>
</html>