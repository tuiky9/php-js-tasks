<h2>Circle of Numbers</h2>
<div class="markdown"><p>Integers from <code>0</code> through <code>n - 1</code> are placed evenly around a circle, so consecutive numbers (including <code>0</code> and <code>n - 1</code>) are neighbors with equal spacing.</p>
<p>Given <code>n</code> and a starting label <code>firstNumber</code>, return the label written directly across the circle—the number opposite <code>firstNumber</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>n = 10</code> and <code>firstNumber = 7</code>, the output should be<br>
<code>circleOfNumbers(n, firstNumber) = 2</code>.</li>
<li>For <code>n = 4</code> and <code>firstNumber = 1</code>, the output should be<br>
<code>circleOfNumbers(n, firstNumber) = 3</code>.</li>
<li>For <code>n = 6</code> and <code>firstNumber = 3</code>, the output should be<br>
<code>circleOfNumbers(n, firstNumber) = 0</code>.</li>
</ul>
<p><img src="img/CircleOfNumbers.png" alt=""></p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer n</strong></p>
<p>A positive <strong>even</strong> integer—the count of numbers on the circle.</p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ n ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer firstNumber</strong></p>
<p>One of the labels on the circle.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ firstNumber ≤ n - 1</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<p>The label opposite <code>firstNumber</code>.</p>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/CircleOfNumbersTest.php</code></p>
