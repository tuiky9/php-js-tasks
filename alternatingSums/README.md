<h2>Alternating Sums</h2>
<div><p>People are lined up in a row and must be split into two teams. The first person joins team 1, the second joins team 2, the third returns to team 1, the fourth to team 2, and the pattern continues.</p>
<p>Each person's weight is given as a positive integer in an array. Return a two-element array: the total weight of team 1 first, then the total weight of team 2.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>a = [100]</code>, the output should be<br>
<code>alternatingSums(a) = [100, 0]</code>.</p>
<p>For <code>a = [1, 2, 3, 4, 5, 6]</code>, the output should be<br>
<code>alternatingSums(a) = [9, 12]</code>.</p>
<p>For <code>a = [10, 10, 10, 10]</code>, the output should be<br>
<code>alternatingSums(a) = [20, 20]</code>.</p>
<p>For <code>a = [7, 3, 5]</code>, the output should be<br>
<code>alternatingSums(a) = [12, 3]</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer a</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ a.length ≤ 10<sup>5</sup></code>,<br>
<code>45 ≤ a[i] ≤ 100</code>.</p>
</li>
<li>
<p><strong>[output] array.integer</strong></p>
</li>
</ul>

</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AlternatingSumsTest.php</code></p>
