//inisiasi soal dalam quiz
const questions = [

    {
        question: "Basis data terdiri dari dua kata, yaitu basis dan data. Basis dapat diartikan sebagai …",
        optionA: "tabel",
        optionB: "gudang",
        optionC: "file",
        optionD: "record",
        correctOption: "optionB"
    },

    {
        question: "Atribut non-key harus bersifat fully functional dependency, merupakan syarat normalisasi …",
        optionA: "1NF",
        optionB: "2NF",
        optionC: "3NF",
        optionD: "BCNF",
        correctOption: "optionB"
    },

    {
        question: "Kumpulan record sejenis yang mempunyai panjang field sama, namun mempunyai isi data yang berbeda disebut ...",
        optionA: "record",
        optionB: "DBMS",
        optionC: "table",
        optionD: "file",
        correctOption: "optionD"
    },

    {
        question: "Penggunaan basis data mampu mengurangi pengulangan data, merupakan tujuan basis data dari segi … ",
        optionA: "space",
        optionB: "availability",
        optionC: "accuracy",
        optionD: "completeness",
        correctOption: "optionA"
    },

    {
        question: "Proses basis data yang identik dengan pencarian lembaran arsip dalam map arsip disebut …",
        optionA: "update",
        optionB: "delete",
        optionC: "insert",
        optionD: "retrieve",
        correctOption: "optionD"
    },

    {
        question: "Berikut ini yang bukan merupakan tujuan penggunaan basis data adalah …",
        optionA: "speed",
        optionB: "accuracy",
        optionC: "shareability",
        optionD: "strong",
        correctOption: "optionD"
    },

    {
        question: "Objek utama yang harus ada pada sebuah basis data karena di dalamnya semua data akan disimpan adalah …",
        optionA: "basis data",
        optionB: "tabel",
        optionC: "field",
        optionD: "record",
        correctOption: "optionB"
    },

    {
        question: "Arsitektur basis data yang memiliki tingkat sangat kompleks adalah … level.",
        optionA: "view",
        optionB: "physical",
        optionC: "database",
        optionD: "network",
        correctOption: "optionB"
    },

    {
        question: "Model basis data yang menggambarkan koleksi record dan relationship di antara data ditunjukkan oleh link (penghubung) yang dapat dipandang sebagai pointer (penunjuk) adalah model …",
        optionA: "konseptual",
        optionB: "jaringan",
        optionC: "implementasi",
        optionD: "relasional",
        correctOption: "optionB"
    },

    {
        question: "Penghapusan tabel dari suatu basis data disebut …",
        optionA: "update",
        optionB: "insert",
        optionC: "delete",
        optionD: "drop",
        correctOption: "optionD"
    },

    {
        question: "Pengguna yang pekerjaannya selalu konstan, yaitu melakukan update data adalah …",
        optionA: "parametric end users",
        optionB: "system analyst",
        optionC: "programmer",
        optionD: "specialized user",
        correctOption: "optionA"
    },

  
    {
        question: "Informasi yang disimpan dalam suatu struktur tertentu yang terintegrasi disebut …",
        optionA: "DBMS",
        optionB: "Fakta",
        optionC: "Basis",
        optionD: "Data",
        correctOption: "optionD"
    },


    {
        question: "Batasan-batasan data dalam suatu sistem basis data disebut … HOTS",
        optionA: "constraint",
        optionB: "primary key",
        optionC: "relasi",
        optionD: "file",
        correctOption: "optionA"
    },

    {
        question: "Pengguna basis data yang membutuhkan akses ke database melalui query disebut …",
        optionA: "administrator",
        optionB: "desainer",
        optionC: "end user",
        optionD: "application programmer",
        correctOption: "optionC"
    },

    {
        question: "Orang, tempat, objek, kejadian, atau konsep dari sebuah organisasi yang ingin dikelola datanya disebut …",
        optionA: "atribut",
        optionB: "ERD",
        optionC: "objek",
        optionD: "entitas",
        correctOption: "optionD"
    },

    {
        question: "Primary key dipih dari …",
        optionA: "multivalued attribute",
        optionB: "composite key",
        optionC: "candidate key",
        optionD: "foreign key",
        correctOption: "optionC"
    },

    {
        question: "Satu atau lebih atribut yang secara unik dapat membedakan suatu entitas dengan entitas lainnya dalam himpunan entitas disebut … key",
        optionA: "alternate",
        optionB: "primary",
        optionC: "foreign",
        optionD: "super",
        correctOption: "optionD"
    },

    {
        question: "Untuk mendefinisikan objek dalam basis data, subbahasa SQL yang tepat digunakan adalah …",
        optionA: "DDL",
        optionB: "DML",
        optionC: "DCL",
        optionD: "TCL",
        correctOption: "optionA"
    },

    {
        question: "Pembuatan basis data yang kompleks cocok menggunakan pendekatan …",
        optionA: "top down",
        optionB: "bottom up",
        optionC: "inside out",
        optionD: "outside in",
        correctOption: "optionA"
    },

    {
        question: "Untuk mengaktifkan database, dapat menggunakan perintah …",
        optionA: "SHOW",
        optionB: "DESC",
        optionC: "ACTIVE",
        optionD: "USE",
        correctOption: "optionD"
    },

    {
        question: "Dalam sebuah model relasional, relationship antartabel dibentuk oleh … key",
        optionA: "foreign",
        optionB: "composite",
        optionC: "candidate",
        optionD: "primary",
        correctOption: "optionD"
    },

    {
        question: "Yang termasuk contoh atribut sederhana adalah …",
        optionA: "alamat",
        optionB: "NIS",
        optionC: "nama",
        optionD: "hobi",
        correctOption: "optionB"
    },

    {
        question: "Normalisasi diperkenalkan oleh E.F Codd pada tahun …",
        optionA: "1970",
        optionB: "1971",
        optionC: "1972",
        optionD: "1973",
        correctOption: "optionC"
    },

    {
        question: "Ketika melakukan pemetaan (mapping) dari sebuah relasi many to many menjadi relasi, maka akan terbentuk relasi … HOTS",
        optionA: "satu",
        optionB: "dua",
        optionC: "tiga",
        optionD: "NULL",
        correctOption: "optionA"
    },

    {
        question: "Ketika melakukan pemetaaan dari sebuah multivalued attribute menjadi relasi, maka akan terbentuk … relasi",
        optionA: "satu",
        optionB: "dua",
        optionC: "tiga",
        optionD: "NULL",
        correctOption: "optionA"
    }

]


let shuffledQuestions = [] //empty array to hold shuffled selected questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0

// function for displaying next question in the array to dom
function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })
   
    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer()
    unCheckRadioButtons()
    //delays next question displaying for a second
    setTimeout(() => {
        if (indexNumber <= 9) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Nilai Buruk, Teruslah Berlatih."
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Nilai Rata-Rata, Anda bisa berbuat lebih baik."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Luar biasa, Pertahankan kerja bagus ini."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal and resets game
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}