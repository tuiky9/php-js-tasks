<h2>reverseInParentheses</h2>
<hr />
<div><p>Implement a function that reverses the characters inside (possibly nested) parentheses in the given string.</p>
<p>Input strings are always well-formed with properly matched <code>()</code> pairs.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "foo(bar)baz"</code>, the output should be<br>
<code>reverseInParentheses(inputString) = "foorabbaz"</code>;</li>
<li>For <code>inputString = "foo(bar)baz(blim)"</code>, the output should be<br>
<code>reverseInParentheses(inputString) = "foorabbazmilb"</code>;</li>
<li>For <code>inputString = "abc(cba)ab(bac)c"</code>, the output should be<br>
<code>reverseInParentheses(inputString) = "abcabcabcabc"</code>.<br>
Each parenthesized segment is reversed independently, including nested groups.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A string of lowercase English letters plus <code>(</code> and <code>)</code>. Parentheses always form a <a href="keyword://regular-bracket-sequence" target="_blank">regular bracket sequence</a>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ inputString.length ≤ 50</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>Return <code>inputString</code> with every parenthesized substring reversed.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ReverseInParanthesesTest.php</code></p>
