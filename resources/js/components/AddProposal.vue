<template>
	<div>
		<div class="fixed-action-btn direction-top" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red modal-trigger" href="#addProposal">
				<i class="material-icons">mode_edit</i>
			</a>
		</div>
		<!-- Modal Structure -->
		<div id="addProposal" class="modal">
			<div class="modal-content">
				<h4> Agregar una nueva Propuesta</h4>
				<div id="form" v-show="!sendIt">

					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s6">
									<input v-model="proposal.title" id="first_name" type="text" class="validate">
									<label for="first_name">Titulo</label>
								</div>
								<div class="input-field col s6">
									<input id="source" v-model="proposal.source" type="text" class="validate">
									<label for="source">Fuente</label>
								</div>
								<div class="input-field col s12">
									<textarea v-model="proposal.description" id="description" class="materialize-textarea"></textarea>
									<label for="description">Descripción</label>
								</div>
								<div class="input-field col s6">
									<select id="parties" v-model="proposal.party_id">
										<option value="" disabled selected>Seleccione un Partido</option>
										<option v-for="party in parties" :value="party.id">{{party.name}}</option>
									</select>
									<label>Partido/frente Politico</label>
								</div>
								<div class="input-field col s6">
									<select id="categories" v-model="proposal.category_id">
										<option value="" disabled selected>Seleccione una Categoria</option>
										<option v-for="category in categories" :value="category.id">{{category.name}}</option>
									</select>
									<label>Categorias</label>
								</div>
							</div>
						</form>
					</div>

				</div>
				<div id="succes" v-show="sendIt">
					<p>Estamos revisando la propuesta, para que sea publicada cuanto antes.</p>
					<a class="btn modal-close">Cerrar</a>
				</div>
			</div>
			<div class="modal-footer" v-show="!sendIt">
				<a href="#" v-on:click="send" class="waves-effect waves-green btn-flat">Agregar propuesta</a>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "AddProposal",
		data(){
			return{
				sendIt: false,
				parties: [],
				categories: [],
				modal: null,
				proposal:{
					title:null,
					source:null,
					description:null,
					party_id:null,
					category_id:null
				}
			}
		},
		mounted(){
			this.createModals();
			this.getParties();
			this.getCategories();
		},
		methods:{
			send(){
				let self = this;
				let body = this.proposal
				body._token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
				console.log(body);
				axios
					.post("/proposals",body)
					.then(res => {
						self.sendIt = true;
					})
			},
			getParties(){
				let self = this;
				axios
					.get("/parties")
					.then(res => {
						self.parties = res.data
						let elems = document.querySelectorAll('#parties');
						window.setTimeout(function(){
							self.$M.FormSelect.init(elems);
						}, 500)
					})
			},
			getCategories(){
				let self = this;
				axios
					.get("/categories")
					.then(res => {
						self.categories = res.data
						let elems = document.querySelectorAll('#categories');
						window.setTimeout(function(){
							self.$M.FormSelect.init(elems);
						}, 500)
					})
			},
			createModals(){
				let self = this;
				let elems = document.querySelectorAll('.modal');
				let options ={
					onCloseEnd: self.resetModal
				}
				self.modal = self.$M.Modal.init(elems, options);
			},
			resetModal(){
				this.proposal = {
					title:null,
					source:null,
					description:null,
					party_id:null,
					category_id:null
				}
				this.sendIt = false;
			}
		}
	}
</script>

<style scoped>

</style>