<h2>Strings Arrangement</h2>
<div><p>You are given an array of strings that all have the same length. Determine whether the strings can be reordered so that every adjacent pair differs in <strong>exactly one</strong> character. Return <code>true</code> when such an ordering exists, otherwise <code>false</code>.</p>
<p><strong>Note: Only the order of whole strings may change — do not rearrange letters within a string.</strong></p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>inputArray = ["q", "q"]</code>, the output should be<br>
<code>stringsRearrangement(inputArray) = false</code>.</p>
<p>Both strings are identical, so no consecutive pair can differ by one character.</p>
</li>
<li>
<p>For <code>inputArray = ["zzzzab", "zzzzbb", "zzzzaa"]</code>, the output should be<br>
<code>stringsRearrangement(inputArray) = true</code>.</p>
<p>One valid order is <code>"zzzzaa", "zzzzab", "zzzzbb"</code> — each neighbour differs in exactly one position.</p>
</li>
<li>
<p>For <code>inputArray = ["abc", "abx", "axx", "abc"]</code>, the output should be<br>
<code>stringsRearrangement(inputArray) = false</code>.</p>
<p>No permutation satisfies the one-character-difference rule between consecutive strings.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.string inputArray</strong></p>
<p>A non-empty array of lowercase-letter strings.</p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ inputArray.length ≤ 10</code>,<br>
<code>1 ≤ inputArray[i].length ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li>Return <code>true</code> if the strings can be permuted so each neighbouring pair differs by exactly one character; otherwise <code>false</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/StringsRearrangementTest.php</code></p>
