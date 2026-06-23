<h2>Sum Up Numbers</h2>
<div class="markdown"><p>CodeMaster scanned his shopping receipt into a string and asked Ratiorg to total the items purchased. Ratiorg wants to automate the job: write a function that adds up every numeric value appearing in the given text.</p>
<p>Return the sum of all numbers found in <code>inputString</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "123450"</code>, the output should be<br>
<code>sumUpNumbers(inputString) = 123450</code>;</li>
<li>For <code>inputString = "a1b2c3"</code>, the output should be<br>
<code>sumUpNumbers(inputString) = 6</code>;</li>
<li>For <code>inputString = "100 and 200"</code>, the output should be<br>
<code>sumUpNumbers(inputString) = 300</code>;</li>
<li>For <code>inputString = "Your payment method is invalid"</code>, the output should be<br>
<code>sumUpNumbers(inputString) = 0</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ inputString.length ≤ 10<sup>5</sup></code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/SumUpNumbersTest.php</code></p>
