<template>
			<div :class="cardstyle" :style="'background-color:'+background">
				<div class="card-content white-text">
					<span class="card-title">{{proposal.title}}</span>
					<p>{{proposal.description}}</p>
				</div>
				<div class="card-action">
					<a :href="proposal.source">Fuente</a>
					<a :href="rturl" target="_blank"> <rt-component height="20" color="white"></rt-component> Retweet</a>
				</div>
			</div>
</template>

<script>
	import RtComponent from "../Helpers/RtComponent";
	export default {
		name: "ProposalCardComponent",
		components: {RtComponent},
		props:['proposal','cardstyle','background'],
		computed:{
			rturl(){
				let url = "https://twitter.com/intent/tweet?text="+this.proposal.title+"&url=https://queproponen.com.ar"
				return url;
			}
		}
	}
</script>

<style scoped>

</style>