<html>

<head>
    <title> Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">
        <div class="headertxt"> Calculator</div>
    </div>

    <div class="calculatorbox">

        <div class="display">
            <input type="text" id="screen" readonly>
        </div>

        <div class="buttons">
            <span class="btn" onclick="appendValue('0')">0</span>
            <span class="btn" onclick="appendValue('1')">1</span>
            <span class="btn" onclick="appendValue('2')">2</span>
            <span class="btn" onclick="appendValue('3')">3</span>

            <span class="btn" onclick="appendValue('4')">4</span>
            <span class="btn" onclick="appendValue('5')">5</span>
            <span class="btn" onclick="appendValue('6')">6</span>
            <span class="btn" onclick="appendValue('7')">7</span>

            <span class="btn" onclick="appendValue('8')">8</span>
            <span class="btn" onclick="appendValue('9')">9</span>
            <span class="btn" onclick="appendValue('.')">.</span>

            <span class="btn operator" onclick="appendValue('+')">+</span>
            <span class="btn operator" onclick="appendValue('-')">-</span>
            <span class="btn operator" onclick="appendValue('*')">*</span>
            <span class="btn operator" onclick="appendValue('/')">/</span>

            <span class="btn equal" onclick="calculate()">=</span>
            <span class="btn" onclick="clearScreen()">C</span>
        </div>

    </div>

    <div class="footer">
        <div class="footertxt">
            Designed By Samia
        </div>
    </div>

  <script>

var screen = document.getElementById("screen");

function appendValue(v)
{
    screen.value = screen.value + v;
}

function clearScreen()
{
    screen.value = "";
}

function calculate()
{
    var text = screen.value;

    var num1 = "";
    var num2 = "";
    var op = "";

    for(var i = 0; i < text.length; i++)
    {
        var ch = text[i];

        if(ch == "+" || ch == "-" || ch == "*" || ch == "/")
        {
            op = ch;
        }
        else
        {
            if(op == "")
            {
                num1 = num1 + ch;
            }
            else
            {
                num2 = num2 + ch;
            }
        }
    }

    var n1 = parseFloat(num1);
    var n2 = parseFloat(num2);
    var result;

    if(op == "+")
    {
        result = n1 + n2;
    }
    else if(op == "-")
    {
        result = n1 - n2;
    }
    else if(op == "*")
    {
        result = n1 * n2;
    }
    else if(op == "/")
    {
        result = n1 / n2;
    }

    screen.value = result;
}

</script>
</body>

</html>