<h2>Knapsack Light</h2>
<div><p>You discover two treasures in a chest. The first weighs <code>weight1</code> and has value <code>value1</code>; the second weighs <code>weight2</code> and has value <code>value2</code>. Your backpack holds at most <code>maxW</code> units of weight, and you must leave the chest for good — what is the greatest total value you can carry?</p>
<p><strong>Remember:</strong> there are exactly two distinct items. You may take zero, one, or both, but never two copies of the same item.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>value1 = 5</code>, <code>weight1 = 3</code>, <code>value2 = 7</code>, <code>weight2 = 4</code>, and <code>maxW = 2</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 0</code>.</p>
<p>Neither item fits in your backpack.</p>
</li>
<li>
<p>For <code>value1 = 3</code>, <code>weight1 = 1</code>, <code>value2 = 2</code>, <code>weight2 = 2</code>, and <code>maxW = 2</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 3</code>.</p>
<p>Both items fit, so take them both.</p>
</li>
<li>
<p>For <code>value1 = 10</code>, <code>weight1 = 5</code>, <code>value2 = 6</code>, <code>weight2 = 4</code>, and <code>maxW = 9</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 16</code>.</p>
<p>Your capacity is enough for both items.</p>
</li>
<li>
<p>For <code>value1 = 5</code>, <code>weight1 = 3</code>, <code>value2 = 7</code>, <code>weight2 = 4</code>, and <code>maxW = 6</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 7</code>.</p>
<p>Both together are too heavy; pick the more valuable single item.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer value1</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ value1 ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer weight1</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ weight1 ≤ 10</code>.</p>
</li>
<li>
<p><strong>[input] integer value2</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ value2 ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer weight2</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ weight2 ≤ 10</code>.</p>
</li>
<li>
<p><strong>[input] integer maxW</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ maxW ≤ 20</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/KnapsackLightTest.php</code></p>
