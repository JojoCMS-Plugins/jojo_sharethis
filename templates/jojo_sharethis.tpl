<div id="sharethis"{if $sharesize=='large'} class="large"{/if}>
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
{elseif $sharetype=='addthis'}
<div class="addthis_sharing_toolbox"></div>
{elseif $sharethis_favourites}
{foreach from=$sharethis_favourites item=f}{if $f=='facebook'}
<a class='facebook' title='Facebook' href="https://www.facebook.com/sharer/sharer.php?u={urlencode($correcturl)}&amp;ref=responsive"><i class="fa fa-facebook"></i></a>{elseif $f=='twitter'}
<a class='twitter' title='Twitter' href="https://twitter.com/intent/tweet?text={rawurlencode($title)}&amp;url={urlencode($correcturl)}"><i class="fa fa-twitter"></i></a>{elseif $f=='googleplus'}
<a class='googleplus' title='Google +' href="https://plus.google.com/share?url={urlencode($correcturl)}"><i class="fa fa-google-plus"></i></a>{elseif $f=='linkedin'}
<a class='linkedin' title='LinkedIn' href="http://www.linkedin.com/shareArticle?mini=true&amp;url={urlencode($correcturl)}&amp;title={rawurlencode($title)}"><i class="fa fa-linkedin"></i></a>{elseif $f=='email'}
<a class='email' title='Email' href="mailto:?subject={rawurlencode($title)}%20on%20{rawurlencode($sitetitle)}&amp;body={urlencode($correcturl)}"><i class="fa fa-envelope-o "></i></a>
{/if}
{/foreach}
{/if}
</div>

