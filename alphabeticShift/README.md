<h2>Alphabetic Shift</h2>
<div><p>Transform a string by shifting every lowercase letter one step forward in the alphabet: <code>a</code> becomes <code>b</code>, <code>b</code> becomes <code>c</code>, and so on. After <code>z</code>, wrap around to <code>a</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputString = "z"</code>, the output should be <code>alphabeticShift(inputString) = "a"</code>.</p>
<p>For <code>inputString = "abc"</code>, the output should be <code>alphabeticShift(inputString) = "bcd"</code>.</p>
<p>For <code>inputString = "zzzz"</code>, the output should be <code>alphabeticShift(inputString) = "aaaa"</code>.</p>
<p>For <code>inputString = "code"</code>, the output should be <code>alphabeticShift(inputString) = "dpef"</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A non-empty string consisting of lowercase English characters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ inputString.length ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>The resulting string after replacing each of its characters.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AlphabeticShiftTest.php</code></p>
