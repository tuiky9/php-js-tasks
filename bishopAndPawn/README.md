<h2>Bishop and Pawn</h2>
<div class="markdown"><p>On a standard 8×8 chess board, a white <code>bishop</code> and a black <code>pawn</code> occupy two squares. Decide whether the bishop can take the pawn in a single move.</p>
<p>Bishops move any number of squares along a diagonal (no jumping over pieces is relevant here—only whether the pawn lies on the bishop's diagonal). The diagram shows valid bishop paths:</p>
<p><img src="img/bishop.jpg" alt="Bishop movement"></p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>bishop = "f1"</code> and <code>pawn = "a6"</code>, the output should be<br>
<code>bishopAndPawn(bishop, pawn) = true</code>.</p>
</li>
<li>
<p>For <code>bishop = "g1"</code> and <code>pawn = "f3"</code>, the output should be<br>
<code>bishopAndPawn(bishop, pawn) = false</code>.</p>
</li>
<li>
<p>For <code>bishop = "c1"</code> and <code>pawn = "f4"</code>, the output should be<br>
<code>bishopAndPawn(bishop, pawn) = true</code>.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string bishop</strong></p>
<p>Location of the white bishop in <a href="keyword://chess-notation" target="_blank">chess notation</a> (file letter + rank digit).</p>
<p><em>Guaranteed constraints:</em><br>
<code>bishop.length = 2</code>,<br>
<code>'a' ≤ bishop[0] ≤ 'h'</code>,<br>
<code>1 ≤ bishop[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[input] string pawn</strong></p>
<p>Location of the black pawn, using the same notation.</p>
<p><em>Guaranteed constraints:</em><br>
<code>pawn.length = 2</code>,<br>
<code>'a' ≤ pawn[0] ≤ 'h'</code>,<br>
<code>1 ≤ pawn[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if the bishop can capture the pawn in one move, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/BishopAndPawnTest.php</code></p>
