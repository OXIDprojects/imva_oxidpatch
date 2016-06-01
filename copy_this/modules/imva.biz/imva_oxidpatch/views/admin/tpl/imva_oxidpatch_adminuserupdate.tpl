[{block name='imva_oxidpatch_header'}][{/block}]

<h1>[{oxmultilang ident='IMVA_OXIDPATCH_ADMINUPDATE'}]</h1>

[{if $oView->imva_oxidpatch_allowFeature('imva_oxidpatch_adminIdModifier')}]
	[{if !$oView->wasExecuted}]
		<p>[{oxmultilang ident='IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH_HLP'}]</p>
	[{else}]
		<p class="msg suc">[{oxmultilang ident='IMVA_OXIDPATCH_ADMINUPDATE_SUCCESS'}]</p>
	[{/if}]
	
	<form name="imva_oxidpatch_adminuserupdate"
		id="imva_oxidpatch_1"
		action="[{$oViewConf->getSelfLink()}]"
		method="post">
		<div>
	        [{$oViewConf->getHiddenSid()}]
	        <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]" />
	        <input type="hidden" name="imva_runUserUpdate" value="yesplease" />
	        <input type="submit" value="[{oxmultilang ident='IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH'}]" class="btn green" />
		</div>
	</form>
[{else}]
	<div class="msg wrn">[{oxmultilang ident='IMVA_OXIDPATCH_FEATUREOFF'}]<br>
	[{oxmultilang ident='IMVA_OXIDPATCH_MAIN_SETTINGSHINT'}]</div>
[{/if}]

[{block name='imva_oxidpatch_footer'}][{/block}]