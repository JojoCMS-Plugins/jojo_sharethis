<div id="sharethis">
{if $sharetype=='sharethis' && $sharethis_favourites}
{foreach from=$sharethis_favourites item=f}{if $f=='facebook'}
<span class='st_facebook{if $sharesize=='large'}_large{/if}' displayText='Facebook Like'></span>{elseif $f=='fblike'}
<span class='st_fblike{if $sharesize=='large'}_large{/if}' displayText='Facebook Like'></span>{elseif $f=='twitter'}
<span class='st_twitter{if $sharesize=='large'}_large{/if}' displayText='Tweet'></span>{elseif $f=='linkedin'}
<span class='st_linkedin{if $sharesize=='large'}_large{/if}' displayText='LinkedIn'></span>{elseif $f=='plusone'}
<span class='st_plusone{if $sharesize=='large'}_large{/if}' displayText='Google +1'></span>{elseif $f=='googleplus'}
<span class='st_googleplus{if $sharesize=='large'}_large{/if}' displayText='Google +'></span>{elseif $f=='pinterest'}
<span class='st_pinterest{if $sharesize=='large'}_large{/if}' displayText='Pinterest'></span>{elseif $f=='email'}
<span class='st_email{if $sharesize=='large'}_large{/if}' displayText='Email'></span>
{/if}
{/foreach}
<span class='st_sharethis{if $sharesize=='large'}_large{/if}' displayText='ShareThis'></span>
{elseif $sharetype=='sharethis'}
<span class='st_fblike{if $sharesize=='large'}_large{/if}' displayText='Facebook Like'></span>
<span class='st_plusone{if $sharesize=='large'}_large{/if}' displayText='Google +1'></span>
<span class='st_twitter{if $sharesize=='large'}_large{/if}' displayText='Tweet'></span>
<span class='st_pinterest{if $sharesize=='large'}_large{/if}' displayText='Pinterest'></span>
<span class='st_email{if $sharesize=='large'}_large{/if}' displayText='Email'></span>
<span class='st_sharethis{if $sharesize=='large'}_large{/if}' displayText='ShareThis'></span>
{else}
<div class="addthis_toolbox addthis_default_style{if $sharesize=='large'} addthis_32x32_style{/if}">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
{/if}
</div>

