/**
 * @author FELIPECORREAGOMES
 */


function limpa_formulario_cepe() {
                        document.getElementById('ruaemp').value=("");
                        document.getElementById('bairroemp').value=("");
                        document.getElementById('cidadeemp').value=("");
                        document.getElementById('ufemp').value=("");
                        document.getElementById('ibgeemp').value=("");
        }

        function meu_callbacke(conteudo) {
                if (!("erro" in conteudo)) {
                        document.getElementById('ruaemp').value=(conteudo.logradouro);
                        document.getElementById('bairroemp').value=(conteudo.bairro);
                        document.getElementById('cidadeemp').value=(conteudo.localidade);
                        document.getElementById('ufemp').value=(conteudo.uf);
                        document.getElementById('ibgeemp').value=(conteudo.ibge);
                }
                else {
                        limpa_formulario_cepe();
                        alert("CEP nao encontrado.");
                }
        }

            function pesquisacepe(valor) {
                var cep = valor.replace(/\D/g, '');
                if (cep != "") {
                    var validacep = /^[0-9]{8}$/;
                    if(validacep.test(cep)) {
                            document.getElementById('ruaemp').value="...";
                            document.getElementById('bairroemp').value="...";
                            document.getElementById('cidadeemp').value="...";
                            document.getElementById('ufemp').value="...";
                            document.getElementById('ibgeemp').value="...";
                            var script = document.createElement('script');
                            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callbacke';
                            document.body.appendChild(script);
                        }
                        else {
                            alert("Formato de CEP invalido.");
                        }
                }
                else {
                    limpa_formulario_cepe();
                }
        };