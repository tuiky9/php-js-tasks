<h2>Array Change</h2>
<div><p>You receive an array of integers. In one move you may increase any single element by <code>1</code>. Find the fewest moves needed to turn the array into a strictly increasing sequence.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [-1000, 0, -2, 0]</code>, the output should be<br>
<code>arrayChange(inputArray) = 5</code>.</p>
<p>For <code>inputArray = [1, 2, 3]</code>, the output should be<br>
<code>arrayChange(inputArray) = 0</code>.</p>
<p>For <code>inputArray = [3, 2, 1]</code>, the output should be<br>
<code>arrayChange(inputArray) = 6</code>.</p>
<p>For <code>inputArray = [2, 2, 2, 2]</code>, the output should be<br>
<code>arrayChange(inputArray) = 6</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputArray.length ≤ 10<sup>5</sup></code>,<br>
<code>-10<sup>5</sup> ≤ inputArray[i] ≤ 10<sup>5</sup></code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The minimal number of moves needed to obtain a strictly increasing sequence from <code>inputArray</code>.<br>
It's guaranteed that for the given test cases the answer always fits signed <code>32</code>-bit integer type.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ArrayChangeTest.php</code></p>
