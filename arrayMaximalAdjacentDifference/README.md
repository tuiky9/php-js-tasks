<h2>Array Maximal Adjacent Difference</h2>
<div><p>Given an array of integers, compute the largest absolute difference between any two neighboring elements.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [1, 1, 1, 1]</code>, the output should be<br>
<code>arrayMaximalAdjacentDifference(inputArray) = 0</code>.</p>
<p>For <code>inputArray = [-1, 4, 10, 3, -2]</code>, the output should be<br>
<code>arrayMaximalAdjacentDifference(inputArray) = 7</code>.</p>
<p>For <code>inputArray = [10, -10, 10, -10]</code>, the output should be<br>
<code>arrayMaximalAdjacentDifference(inputArray) = 20</code>.</p>
<p>For <code>inputArray = [5, 11, 2, 17]</code>, the output should be<br>
<code>arrayMaximalAdjacentDifference(inputArray) = 15</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputArray.length ≤ 10</code>,<br>
<code>-15 ≤ inputArray[i] ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The maximal absolute difference.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ArrayMaximalAdjacentDifferenceTest.php</code></p>
