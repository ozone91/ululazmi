<!-- Search Module -->
<ion:search>
	  
	  <h3><ion:lang key="module_search_results_title" /> "<ion:realm />"</h3>

	  <!-- Result 0 -->
	  <ion:search:results:count is="0">
	      <ion:lang key="module_search_message_no_results" /><b>"<ion:search:realm />"</b>
	  </ion:search:results:count>
	  
	  <!-- Result Found -->
	  <ion:else>
		    <ion:search:results>
		        <ion:result>
		          <div>
		                <h6><a href="<ion:url />"><ion:title /></a></h6>
		                <ion:content words="30" /><a href="<ion:url />"><ion:lang key="module_search_read_complete_article" /></a>
		            </div>
		        </ion:result>
		    </ion:search:results>
	  </ion:else>

</ion:search>
