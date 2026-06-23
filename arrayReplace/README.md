<h2>Array Replace</h2>
<div class="markdown"><p>Given an array of integers, substitute every occurrence of <code>elemToReplace</code> with <code>substitutionElem</code> and return the updated array.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [1, 2, 3]</code>, <code>elemToReplace = 4</code>, and <code>substitutionElem = 0</code>, the output should be<br>
<code>arrayReplace(inputArray, elemToReplace, substitutionElem) = [1, 2, 3]</code>.</p>
<p>For <code>inputArray = [5, 5, 5]</code>, <code>elemToReplace = 5</code>, and <code>substitutionElem = 1</code>, the output should be<br>
<code>arrayReplace(inputArray, elemToReplace, substitutionElem) = [1, 1, 1]</code>.</p>
<p>For <code>inputArray = [0, -1, 0]</code>, <code>elemToReplace = 0</code>, and <code>substitutionElem = 9</code>, the output should be<br>
<code>arrayReplace(inputArray, elemToReplace, substitutionElem) = [9, -1, 9]</code>.</p>
<p>For <code>inputArray = [2, 3, 2, 3]</code>, <code>elemToReplace = 3</code>, and <code>substitutionElem = 7</code>, the output should be<br>
<code>arrayReplace(inputArray, elemToReplace, substitutionElem) = [2, 7, 2, 7]</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ inputArray.length ≤ 10<sup>4</sup></code>,<br>
<code>0 ≤ inputArray[i] ≤ 10<sup>9</sup></code>.</p>
</li>
<li>
<p><strong>[input] integer elemToReplace</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ elemToReplace ≤ 10<sup>9</sup></code>.</p>
</li>
<li>
<p><strong>[input] integer substitutionElem</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ substitutionElem ≤ 10<sup>9</sup></code>.</p>
</li>
<li>
<p><strong>[output] array.integer</strong></p>
<ul>
<li>The array after replacing every matching element.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ArrayReplaceTest.php</code></p>
