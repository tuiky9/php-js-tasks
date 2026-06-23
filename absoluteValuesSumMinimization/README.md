<h2>Absolute Values Sum Minimization</h2>
<div class="markdown"><p>You have a sorted array of integers <code>a</code>. Pick one value <code>x</code> from that array and compute the total distance from every element to <code>x</code>:</p>
<pre><code>abs(a[0] - x) + abs(a[1] - x) + ... + abs(a[a.length - 1] - x)
</code></pre>
<p>(Here <code>abs</code> is the absolute value.)</p>
<p>Return the element of <code>a</code> that makes this sum as small as possible. If more than one element ties for the minimum, return the smallest such value.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>a = [-10, -3, 0, 5, 9]</code>, the output should be <code>absoluteValuesSumMinimization(a) = 0</code>.</p>
<p>The value <code>0</code> lies at the center of the sorted list and minimizes the sum of absolute differences.</p>
</li>
<li>
<p>For <code>a = [1]</code>, the output should be <code>absoluteValuesSumMinimization(a) = 1</code>.</p>
<p>With a single element, that element is the only choice.</p>
</li>
<li>
<p>For <code>a = [1, 1, 1, 1, 2]</code>, the output should be <code>absoluteValuesSumMinimization(a) = 1</code>.</p>
<p>Among the repeated <code>1</code>s and the lone <code>2</code>, choosing <code>1</code> gives the smallest total distance.</p>
</li>
<li>
<p>For <code>a = [1, 2, 145, 146, 2, 1]</code>, the output should be <code>absoluteValuesSumMinimization(a) = 145</code>.</p>
<p>The middle values of the sorted array produce the minimum sum.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer a</strong></p>
<p>A non-empty array of integers, sorted in ascending order.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ a.length ≤ 1000</code>,<br>
<code>-10<sup>6</sup> ≤ a[i] ≤ 10<sup>6</sup></code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>An integer representing the element from <code>a</code> that minimizes the sum of its absolute differences with all other elements.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AbsoluteValuesSumMinimizationTest.php</code></p>
