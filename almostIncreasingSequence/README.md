<h2>Almost Increasing Sequence</h2>
<div><p>You are given an array of integers. Decide whether you can delete at most one element so that the remaining values form a strictly increasing sequence.</p>
<p><em>Note:</em> a sequence <code>a<sub>0</sub></code>, <code>a<sub>1</sub></code>, ..., <code>a<sub>n</sub></code> is strictly increasing when <code>a<sub>0</sub> &lt; a<sub>1</sub> &lt; ... &lt; a<sub>n</sub></code>. A sequence with one element counts as strictly increasing.</p>
<p><span style="color:#2b3b52;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>sequence = [1, 2, 3, 4]</code>, the output should be<br>
<code>almostIncreasingSequence(sequence) = true</code>.</p>
<p>The array is already strictly increasing, so no removal is needed.</p>
</li>
<li>
<p>For <code>sequence = [10, 1, 2, 3, 4, 5]</code>, the output should be<br>
<code>almostIncreasingSequence(sequence) = true</code>.</p>
<p>Removing <code>10</code> leaves <code>[1, 2, 3, 4, 5]</code>, which is strictly increasing.</p>
</li>
<li>
<p>For <code>sequence = [1, 1, 2, 3]</code>, the output should be<br>
<code>almostIncreasingSequence(sequence) = true</code>.</p>
<p>Removing one of the duplicate <code>1</code>s produces a valid strictly increasing sequence.</p>
</li>
</ul>
<p><span style="color:#2b3b52;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer sequence</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ sequence.length ≤ 10<sup>5</sup></code>,<br>
<code>-10<sup>5</sup> ≤ sequence[i] ≤ 10<sup>5</sup></code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li>Return <code>true</code> if it is possible to remove one element from the array in order to get a strictly increasing sequence, otherwise return <code>false</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AlmostIncreasingSequenceTest.php</code></p>
