{extends file="../templates/main.tpl"}
{block name=footer} Przykładowa treść stopki {/block}

{block name=content}
	<h3>Prosty kalkulator</h3>
	<form class="credit_form" action="{$conf->app_url}/app/Credit.php" method="post">
		<label for="id_x"> {$loan_amount|default:"Kwota"} </label>
		<input id="id_x" onfocus="this.value=''" type="text" name="amount" value="{$form->amount} "/><br />
		<label for="id_y"> {$number_of_years|default:"Lata"} </label>
		<input id="id_y" onfocus="this.value=''" type="text" name="months" value="{$form->months} "/><br />
		<label for="id_z"> {$percent_desc|default:"Oprocentowanie"} </label>
		<input id="id_z" onfocus="this.value=''" type="text" name="percent" value="{$form->percent} "/><br />
		<input type="submit" value="{$count|default:"X"}"/>
	</form>
	<div class="messages">
		{block name=messages}
			{if $messages_calc->isError()}
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
				{foreach $messages_calc->getErrors() as $err}
					{strip}
						<li>{$err}</li>
					{/strip}
				{/foreach}
				</ol>
			{/if}
		{/block}
		{block name=infos}
			{if $messages_calc->isInfo()}
				<h4>Informacje: </h4>
				<ol class="inf">
				{foreach $messages_calc->getInfos() as $inf}
					{strip}
						<li>{$inf}</li>
					{/strip}
				{/foreach}
				</ol>
			{/if}
		{/block}
		{block name=result}
			{if isset($result_calc)}
				<h4>Wynik</h4>
				<p class="res">
					{$result_calc} {$amount_curr|default:"zł"}
				</p>
			{/if}
		{/block}
	</div>
{/block}