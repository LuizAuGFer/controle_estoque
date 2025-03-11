<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryCard from '@/Components/PrimaryCard.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';

import { Head } from "@inertiajs/vue3";
import { usePage } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const page = usePage();
const company = page.props.company;

const form = useForm({
    companyName: '',
});

</script>

<style>
@import "datatables.net-dt";
</style>
<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <div class="row">
      <div v-if="company" class="col-12">
        <div class="container">
          <div class="row mb-3 mt-3">
            <div class="col-sm-6">
              <h3 class="mb-0">Título da página</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Unfixed Layout
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div v-else="company">
        <h2 class="mt-3">Informe o nome da sua empresa para começar! 🚀</h2>
        <PrimaryCard title="Criando sua primeira empresa!" >
          <InputLabel for="companyName" value="Nome:" />
          <TextInput id="companyName" ref="companyName" v-model="form.companyName" type="text" autocomplete="name" />
          <InputError :message="form.errors.name" class="mt-2" />
          <template #footer>
            <PrimaryButton :disabled="form.processing">Salvar</PrimaryButton>
          </template>
        </PrimaryCard >
      </div>
    </div>
  </AuthenticatedLayout>
</template>
