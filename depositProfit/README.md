<h2>Deposit Profit</h2>
<div class="markdown"><p>You open a bank account with an initial <code>deposit</code>. Each year the balance grows by the same percentage <code>rate</code> (applied to the current balance). Assuming you never add more money, find how many full years it takes until the balance exceeds a given <code>threshold</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>deposit = 50</code>, <code>rate = 25</code>, and <code>threshold = 100</code>, the output should be<br>
<code>depositProfit(deposit, rate, threshold) = 4</code>.</p>
<p>With a 25% annual increase, the balance evolves as:</p>
<ul>
<li>year 0: <code>50</code>;</li>
<li>year 1: <code>62.5</code>;</li>
<li>year 2: <code>78.125</code>;</li>
<li>year 3: <code>97.65625</code>;</li>
<li>year 4: <code>122.0703125</code>.</li>
</ul>
<p>The balance first goes above <code>100</code> after 4 years, so the answer is <code>4</code>.</p>
<p>Additional examples:</p>
<ul>
<li>For <code>deposit = 100</code>, <code>rate = 1</code>, <code>threshold = 101</code>, the output should be <code>depositProfit(deposit, rate, threshold) = 1</code>.</li>
<li>For <code>deposit = 1</code>, <code>rate = 100</code>, <code>threshold = 64</code>, the output should be <code>depositProfit(deposit, rate, threshold) = 6</code>.</li>
<li>For <code>deposit = 100</code>, <code>rate = 10</code>, <code>threshold = 1000</code>, the output should be <code>depositProfit(deposit, rate, threshold) = 25</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer deposit</strong></p>
<p>Starting balance; a positive integer.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ deposit ≤ 100</code>.</p>
</li>
<li>
<p><strong>[input] integer rate</strong></p>
<p>Annual growth rate in <strong>percent</strong> of the current balance.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ rate ≤ 100</code>.</p>
</li>
<li>
<p><strong>[input] integer threshold</strong></p>
<p>Target balance to exceed.</p>
<p><em>Guaranteed constraints:</em><br>
<code>deposit &lt; threshold ≤ 200</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The number of years until the balance surpasses <code>threshold</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/DepositProfitTest.php</code></p>
