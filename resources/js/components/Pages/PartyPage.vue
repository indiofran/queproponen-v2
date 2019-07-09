<template>
	<div>
		<div :style="'background-color:'+ party.color">
			<div class="container">
				<div class="header valign-wrapper">
					<div class="header-text">
						<img class="responsive-img" :src="party.image" style="max-height: 100px;">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<ul class="tabs">
				<li class="tab col s6"><a class="active" href="#test1">Propuestas</a></li>
				<!--				<li class="tab col s4"><a href="#test2">Listas</a></li>-->
				<li class="tab col s6"><a href="#test3">Candidatos</a></li>
			</ul>
			<section id="content">
				<div class="col s12">
					<div id="test1" class="col s12">
						<div v-if="!isloaded" class="row">
							<div class="col s12" v-for="i in 6">
								<preloader-component :contentText="true"></preloader-component>
							</div>
						</div>
						<div v-else-if ="proposals">
							<div v-for="category in categories">
								<h5> <i class="material-icons" style="vertical-align: bottom;">{{category.image}} </i> {{category.name}}</h5>
								<div class="divider"></div>
								<div class="row">
									<div class="col s12" v-for="proposal in category.partyProposals">
										<proposal-card-component :candidate="candidates[0]" :cardstyle="['card']" :backgroundCC="category.color" :proposal="proposal"></proposal-card-component>
									</div>
								</div>
							</div>
						</div>
						<div v-else>
							<div class="card-panel teal lighten-2"> Este Partido no tiene publicadas propuestas politicas.</div>
						</div>
					</div>
					<!--					<div id="test2" class="col s12">Test 2</div>-->
					<div id="test3" class="col s12">
						<div class="col s12 m4 l3" v-for="candidate in candidates">
							<candidate-card-component :candidate="candidate"></candidate-card-component>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</template>

<script>
	import CandidateCardComponent from "../Cards/CandidateCardComponent";
	import ProposalCardComponent from "../Cards/ProposalCardComponent";
	import PreloaderComponent from "../Helpers/PreloaderComponent";
	export default {
		name: "PartyPage",
		components: {PreloaderComponent, ProposalCardComponent, CandidateCardComponent},
		data(){
			return{
				party: {},
				candidates: {},
				categories: [],
				tabInstance: null,
				isloaded:false,
				proposals: false
			}
		},
		created(){
			this.getParty()
			this.getCandidates()
			this.getPorposals()
		},
		mounted() {
			let el = document.querySelector(".tabs")
			this.tabInstance = this.$M.Tabs.init(el);
		},
		methods:{
			getParty(){
				axios
					.get("/api/party/" + this.$route.params.id)
					.then(res => {
						this.party = res.data
					})
			},
			getCandidates(){
				axios
					.get("/api/party/" + this.$route.params.id + "/candidates" )
					.then(res => {
						this.candidates = res.data
					})
			},
			getPorposals(){
				axios
					.get("/api/party/" + this.$route.params.id + "/proposals" )
					.then(res => {
						this.categories = res.data
						this.hasProposals();
						this.isloaded = true

					})
			},
			hasProposals(){
				let self = this;
				for (let i = 0; i < self.categories.length; i++){
					if(self.categories[i].partyProposals.length == undefined ){
						self.proposals = true;
						return
					}
				}
				self.proposals = false;
				return
			}
		}
	}
</script>

<style scoped>
	.header{
		height: 100px;
	}
	.header-text{
		display: block;
		margin: auto;
	}
	#content{
		margin-top: 4em;
	}
</style>