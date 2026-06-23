<h2>Array Max Consective Sum</h2>
<div><p>Given an array of integers and a positive integer <code>k</code>, find the largest possible sum of any block of <code>k</code> consecutive elements.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [1, 3, 2, 4]</code> and <code>k = 3</code>, the output should be<br>
<code>arrayMaxConsecutiveSum(inputArray, k) = 9</code>.<br>
The consecutive triples sum to <code>6</code>, <code>9</code>, and <code>6</code>; the maximum is <code>9</code>.</p>
<p>For <code>inputArray = [-1, -2, -3, -4]</code> and <code>k = 2</code>, the output should be<br>
<code>arrayMaxConsecutiveSum(inputArray, k) = -3</code>.</p>
<p>For <code>inputArray = [5, 5, 5, 5]</code> and <code>k = 1</code>, the output should be<br>
<code>arrayMaxConsecutiveSum(inputArray, k) = 5</code>.</p>
<p>For <code>inputArray = [10, -2, 3, 1, 2]</code> and <code>k = 4</code>, the output should be<br>
<code>arrayMaxConsecutiveSum(inputArray, k) = 12</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p>Array of positive integers.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputArray.length ≤ 10<sup>5</sup></code>,<br>
<code>1 ≤ inputArray[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[input] integer k</strong></p>
<p>An integer (not greater than the length of <code>inputArray</code>).</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ k ≤ inputArray.length</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The maximal possible sum.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ArrayMaxConsecutiveSumTest.php</code></p>
