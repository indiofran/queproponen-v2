<template>
	<div>
		<div class="img-background">
			<div class="container">
				<div class="header valign-wrapper">
					<div class="header-text row">
						<div class="col s12">
							<div class="center">
								<img src="\img\logo_4.png" style="max-width: 350px;">
							</div>
							<p>Todas las propuestas y programas electorales de los Candidatos a Presidente de la Nación 2019.</p>
							<p>✔Informate</p>
							<p>✔Compará</p>
							<p>✔Decidí</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h3 class="center">Partidos/Frentes Políticos</h3>
			<div v-if="parties.length === 0">
				<div class="col s12 m6 l4 xl3" v-for="i in 6">
					<preloader-component :contentText="true"></preloader-component>
				</div>
			</div>
			<div v-else class="col s12 m6 l4 xl3" v-for="party in parties">
				<card-componenet :title="party.name" :img="party.image" :description="party.description" :color="party.color" :partyid="party.id"></card-componenet>
			</div>
		</div>
	</div>
</template>

<script>
	import CardComponenet from "../Cards/CardComponenet";
	import PreloaderComponent from "../Helpers/PreloaderComponent";
	export default {
		name: "PartiesPages",
		components: {PreloaderComponent, CardComponenet},
		mounted(){
			this.getParties()
		},
		data(){
			return {
				parties: [],
			}
		},
		methods:{
			getParties(){
				axios
					.get("/api/parties")
					.then(res => {
						this.parties = res.data
						console.log(this.parties);
					})
			}
		}
	}
</script>

<style scoped>
	.header{
		min-height: 300px;
	}
	.header-text{
		display: block;
	}
	.img-background{
		background-color: #006c87;
		color:white;
	}
</style>