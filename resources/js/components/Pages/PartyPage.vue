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
				<li class="tab col s4"><a class="active" href="#test1">Propuestas</a></li>
				<!--				<li class="tab col s4"><a href="#test2">Listas</a></li>-->
				<li class="tab col s4"><a href="#test3">Candidatos</a></li>
			</ul>
			<section id="content">
				<div class="col s12">
					<div id="test1" class="col s12">
						<div v-for="category in categories">
							<h5> <i class="material-icons" style="vertical-align: bottom;">{{category.image}} </i> {{category.name}}</h5>
							<div class="divider"></div>
							<div class="row">
								<div class="col s6" v-for="proposal in category.partyProposals">
									<proposal-card-component :cardstyle="['card', category.color]" :proposal="proposal"></proposal-card-component>
								</div>
							</div>
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
	export default {
		name: "PartyPage",
		components: {ProposalCardComponent, CandidateCardComponent},
		data(){
			return{
				party: {},
				candidates: {},
				categories: [],
				tabInstance: null
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
					.get("/party/" + this.$route.params.id)
					.then(res => {
						this.party = res.data
					})
			},
			getCandidates(){
				axios
					.get("/party/" + this.$route.params.id + "/candidates" )
					.then(res => {
						this.candidates = res.data
					})
			},
			getPorposals(){
				axios
					.get("/party/" + this.$route.params.id + "/proposals" )
					.then(res => {
						this.categories = res.data
						console.log(this.categories)
					})
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