<template>
	<div class="panel">
		<div class="panel-heading">
			{{ thread.title }}
		</div>

		<div class="panel-body">
			{{ thread.body }}
		</div>
	</div>
</template>

<script>
	export default {
		props: ['id'],
		data() {
			return {
				thread: {}
			}
		},
		created() {
			axios.get(getRoute('threads.show', { thread: this.id }))
				.then(response => {
					return response.data.data;
				})
				.then(data => {
					this.thread = data;
				});
		}
	}
</script>

<style>

</style>