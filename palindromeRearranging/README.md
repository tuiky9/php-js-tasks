<h2>Array Change</h2>
<div><p>Given a string, determine whether its characters can be permuted to form a <a href="keyword://palindrome" target="_blank">palindrome</a>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "abbcabb"</code>, the output should be<br>
<code>palindromeRearranging(inputString) = true</code>.</li>
<li>For <code>inputString = "abcad"</code>, the output should be<br>
<code>palindromeRearranging(inputString) = false</code>.</li>
<li>For <code>inputString = "a"</code>, the output should be<br>
<code>palindromeRearranging(inputString) = true</code>.</li>
<li>For <code>inputString = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc"</code>, the output should be<br>
<code>palindromeRearranging(inputString) = false</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A string of lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ inputString.length ≤ 50</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if a palindrome permutation exists, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/PalindromeRearrangingTest.php</code></p>
