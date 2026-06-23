<h2>All Longest String</h2>
<div ><p>From an array of strings, build a new array that includes every string whose length equals the maximum length found in the input. Keep the original order of those strings.</p>
<p><span class="markdown--header" style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = ["a", "bb", "ccc", "dd"]</code>, the output should be<br>
<code>allLongestStrings(inputArray) = ["ccc"]</code>.</p>
<p>For <code>inputArray = ["same", "size", "test", "best"]</code>, the output should be<br>
<code>allLongestStrings(inputArray) = ["same", "size", "test", "best"]</code>.</p>
<p>For <code>inputArray = ["long", "longer", "tiny", "longer"]</code>, the output should be<br>
<code>allLongestStrings(inputArray) = ["longer", "longer"]</code>.</p>
<p>For <code>inputArray = ["x"]</code>, the output should be<br>
<code>allLongestStrings(inputArray) = ["x"]</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.string inputArray</strong></p>
<p>A non-empty array.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ inputArray.length ≤ 10</code>,<br>
<code>1 ≤ inputArray[i].length ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] array.string</strong></p>
<ul>
<li>Array of the longest strings, stored in the same order as in the <code>inputArray</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AllLongestStringsTest.php</code></p>
