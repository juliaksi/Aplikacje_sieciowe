{extends file="../templates/header.tpl"}
{extends file="../templates/main.tpl"}
{extends file="../templates/messages.tpl"}
{extends file="../templates/footer.tpl"}

{block name=footer} {$footer_1|default:"Wartość stopki 1"} {/block}
{block name=footer_desc} {$footer_2|default:"Wartość stopki 2"} {/block}
{block name=messages}
	{if isset($messages_calc)}
		{if count($messages_calc) > 0}
			<h4>{$errors|default:"Błędy"}</h4>
			<ol class="err">
				{foreach  $messages_calc as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ol>
		{/if}
	{/if}
{/block}
{block name=infos}
	{if isset($infos)}
		{if count($infos) > 0}
			<h4>{$info|default:"Info"} </h4>
			<ol class="inf">
				{foreach  $infos as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
				{/foreach}
			</ol>
		{/if}
	{/if}
{/block}
{block name=result}
	{if isset($result_calc)}
		<h4>{$calc_here|default:"Wynik"}</h4>
		<p class="res">
			{$result_calc} {$amount_curr|default:"zł"}
		</p>
	{/if}
{/block}
{block name=content}
	<h3>{$form_heading|default:"Prosty kalkulator"}</h3>
	<form class="credit_form" action="{$app_url}/app/calc.php" method="post">
		<label for="id_x"> {$loan_amount|default:"Kwota"} </label>
		<input id="id_x" onfocus="this.value=''" type="text" name="amount" value="{$form['amount']} "/><br />
		<label for="id_y"> {$number_of_years|default:"Lata"} </label>
		<input id="id_y" onfocus="this.value=''" type="text" name="months" value="{$form['months']} "/><br />
		<label for="id_z"> {$percent_desc|default:"Oprocentowanie"} </label>
		<input id="id_z" onfocus="this.value=''" type="text" name="percent" value="{$form['percent']} "/><br />
		<input type="submit" value="{$count|default:"X"}" />
	</form>
{/block}
