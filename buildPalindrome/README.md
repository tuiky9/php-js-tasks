<h2>Build Palindrome</h2>
<div class="markdown"><p>You are given a string. Append the fewest possible characters to its <strong>end</strong> so that the result is a <a href="keyword://palindrome" target="_blank">palindrome</a> (reads the same forward and backward). Return that shortest palindrome.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>st = "ababab"</code>, the output should be<br>
<code>buildPalindrome(st) = "abababa"</code>.</li>
<li>For <code>st = "abba"</code>, the output should be<br>
<code>buildPalindrome(st) = "abba"</code>.</li>
<li>For <code>st = "abc"</code>, the output should be<br>
<code>buildPalindrome(st) = "abcba"</code>.</li>
<li>For <code>st = "aacecaaa"</code>, the output should be<br>
<code>buildPalindrome(st) = "aacecaaacecaa"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string st</strong></p>
<p>A string of lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ st.length ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<p>The shortest palindrome obtainable by appending characters to the end of <code>st</code>.</p>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/BuildPalindromeTest.php</code></p>
