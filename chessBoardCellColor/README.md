<h2>Chess Board Cell Color</h2>
<div class="markdown"><p>On a standard 8×8 chessboard, squares alternate between two colors. Given two cell coordinates, return whether both squares share the same color.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>cell1 = "D5"</code> and <code>cell2 = "E6"</code>, the output should be<br>
<code>chessBoardCellColor(cell1, cell2) = true</code>.</li>
<li>For <code>cell1 = "A1"</code> and <code>cell2 = "H3"</code>, the output should be<br>
<code>chessBoardCellColor(cell1, cell2) = false</code>.</li>
<li>For <code>cell1 = "G4"</code> and <code>cell2 = "C8"</code>, the output should be<br>
<code>chessBoardCellColor(cell1, cell2) = true</code>.</li>
<li>For <code>cell1 = "B3"</code> and <code>cell2 = "H7"</code>, the output should be<br>
<code>chessBoardCellColor(cell1, cell2) = true</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string cell1</strong></p>
<p>First cell in <a href="keyword://chess-notation" target="_blank">chess notation</a> (uppercase file letter and rank digit).</p>
<p><em>Guaranteed constraints:</em><br>
<code>cell1.length = 2</code>,<br>
<code>'A' ≤ cell1[0] ≤ 'H'</code>,<br>
<code>1 ≤ cell1[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[input] string cell2</strong></p>
<p>Second cell in the same notation.</p>
<p><em>Guaranteed constraints:</em><br>
<code>cell2.length = 2</code>,<br>
<code>'A' ≤ cell2[0] ≤ 'H'</code>,<br>
<code>1 ≤ cell2[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if both cells have the same color, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/ChessBoardCellColorTest.php</code></p>
