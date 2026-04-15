function analyzeText() {

    var inputText = document.getElementById("txt").value;

    // character count
    var characterCount = inputText.length;

    // word count (simple way)
    var wordCount = 0;

    if (inputText != "") {
        var wordsArray = inputText.split(" ");
        wordCount = wordsArray.length;
    }

    // reverse text (manual way)
    var reversedText = "";

    for (var i = inputText.length - 1; i >= 0; i--) {
        reversedText = reversedText + inputText[i];
    }

    // show result
    document.getElementById("c").innerHTML = characterCount;
    document.getElementById("w").innerHTML = wordCount;
    document.getElementById("rev").innerHTML = reversedText;

    // show result box
    document.getElementById("show").style.display = "block";
}