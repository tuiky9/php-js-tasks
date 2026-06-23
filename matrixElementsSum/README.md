<h2>Matrix Elements Sum</h2>
<div><p>The CodeBots moved into a new building. Each room has a price tag, and some rooms are free — but rumor says every free room is haunted. The bots refuse to live in haunted rooms <strong>or in any room directly below a haunted one</strong> (in the same column).</p>
<p>Given a rectangular integer matrix <code>matrix</code> where each entry is a room price (<code>0</code> means haunted), return the sum of all prices for rooms the CodeBots are willing to occupy.</p>
<p><strong>Example</strong></p>
<ul>
<li>
<p>For</p>
<pre><code>matrix = [[1]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 1</code>.</p>
<p>No haunted rooms — the single room counts.</p>
</li>
<li>
<p>For</p>
<pre><code>matrix = [[0]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 0</code>.</p>
<p>The only room is haunted, so nothing is counted.</p>
</li>
<li>
<p>For</p>
<pre><code>matrix = [[4, 0],
          [1, 1],
          [2, 2]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 7</code>.</p>
<p>The haunted room in column 1 blocks everything below it in that column. Sum: <code>4 + 1 + 2 = 7</code> (the <code>0</code> and both rooms beneath it are excluded).</p>
</li>
<li>
<p>For</p>
<pre><code>matrix = [[1, 1, 1, 0],
          [0, 5, 0, 1],
          [2, 1, 3, 10]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 9</code>.</p>
<p>Haunted cells and everything below them in the same column are skipped. Valid rooms sum to <code>1 + 1 + 1 + 5 + 1 = 9</code>.</p>
</li>
</ul>
<p><span style="color:#2b3b52;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.array.integer matrix</strong></p>
<p>A 2-D array of room prices. A value of <code>0</code> marks a haunted room.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ matrix.length ≤ 5</code>,<br>
<code>1 ≤ matrix[i].length ≤ 5</code>,<br>
<code>0 ≤ matrix[i][j] ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>Total cost of all rooms suitable for the CodeBots.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MatrixElementsSumTest.php</code></p>
