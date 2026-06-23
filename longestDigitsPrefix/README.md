<h2>Longest Digits Prefix</h2>
<div class="markdown"><p>Given a string, return the longest <a href="keyword://string-prefix" target="_blank">prefix</a> that consists entirely of digit characters.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "0123456789"</code>, the output should be<br>
<code>longestDigitsPrefix(inputString) = "0123456789"</code>.</li>
<li>For <code>inputString = "abc"</code>, the output should be<br>
<code>longestDigitsPrefix(inputString) = ""</code>.</li>
<li>For <code>inputString = "001a"</code>, the output should be<br>
<code>longestDigitsPrefix(inputString) = "001"</code>.</li>
<li>For <code>inputString = "1"</code>, the output should be<br>
<code>longestDigitsPrefix(inputString) = "1"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 3 seconds (java)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputString.length ≤ 100</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/LongestDigitsPrefixTest.php</code></p>
