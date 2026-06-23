<h2>Are Similar</h2>
<hr />
<div><p>Two arrays are <em>similar</em> if one can be turned into the other by swapping at most one pair of elements in either array.</p>
<p>Given two integer arrays <code>a</code> and <code>b</code> of the same length, return whether they are similar.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>a = [1, 2, 3]</code> and <code>b = [1, 2, 4]</code>, the output should be<br>
<code>areSimilar(a, b) = false</code>.</p>
<p>Even a single swap cannot make the arrays equal.</p>
</li>
<li>
<p>For <code>a = [3, 1, 2]</code> and <code>b = [1, 3, 2]</code>, the output should be<br>
<code>areSimilar(a, b) = true</code>.</p>
<p>Swapping <code>3</code> and <code>1</code> in <code>a</code> produces <code>b</code>.</p>
</li>
<li>
<p>For <code>a = [1, 2, 2]</code> and <code>b = [2, 1, 1]</code>, the output should be<br>
<code>areSimilar(a, b) = false</code>.</p>
<p>No single swap in either array makes them match.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.integer a</strong></p>
<p>Array of integers.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ a.length ≤ 10<sup>5</sup></code>,<br>
<code>1 ≤ a[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[input] array.integer b</strong></p>
<p>Array of integers of the same length as <code>a</code>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>b.length = a.length</code>,<br>
<code>1 ≤ b[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if <code>a</code> and <code>b</code> are similar, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>

</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AreSimilarTest.php</code></p>
