pagina-manutencao/
│
├─ index.html             → Página principal
├─ assets/                → Arquivos de mídia e scripts
│   ├─ css/
│   │   └─ app.css        → Estilos da página
│   ├─ js/
│   │   └─ app.js         → Scripts (contagem, fotos, fundo dinâmico)
│   ├─ images/
│   │   ├─ retros/        → Fotos nostálgicas (foto1.png até foto14.png)
│   │   ├─ backgrounds/   → Imagens de fundo (dia, amanhecer, noite, madrugada)
│   │   └─ video.mp4      → Vídeo da manutenção
Perfeito! Aqui vai uma explicação **completa da página de manutenção**, só texto, sem instruções de GitHub:

---

# Explicação da Página de Manutenção

### Estrutura e Funcionamento

1. **Página Principal (`index.html`)**

   * É o arquivo que carrega todo o conteúdo da página.
   * Inclui o layout, textos, vídeos, contagem regressiva e fotos nostálgicas.
   * Responsivo: se ajusta automaticamente a diferentes tamanhos de tela (desktop, notebook, tablet, celular).

2. **Assets**

   * **CSS (`app.css`)**: controla a aparência da página (cores, fontes, efeitos de fundo, cards, contagem, etc.).
   * **JS (`app.js`)**: controla funcionalidades como:

     * Contagem regressiva até uma data definida.
     * Alternância automática das fotos nostálgicas.
     * Mudança de fundo de acordo com o horário do dia (amanhecer, dia, noite, madrugada).
   * **Images**: todas as imagens usadas na página (fotos nostálgicas, fundos de dia/noite, etc.).
   * **Vídeo**: arquivo de vídeo para exibir atualização ou aviso de manutenção.

3. **Contagem Regressiva**

   * Mostra **Dias, Horas, Minutos e Segundos** até a data definida (ex: 5 de janeiro de 2026).
   * Fixa a contagem usando `localStorage`, então mesmo se a página for recarregada, ela continua de onde parou.
   * Exibida em **cards quadrados** centralizados na tela.

4. **Novidades**

   * Lista completa de atualizações, eventos, itens e melhorias.
   * É **estática**, sem movimentos ou animações.
   * O card é rolável se houver muitos itens, mas mantém a altura máxima.

5. **Fotos Nostálgicas**

   * Mostradas centralizadas.
   * Alternam automaticamente a cada 5 segundos.
   * Imagens em sequência (`foto1.png` até `foto14.png`), mas podem ser substituídas.

6. **Vídeo e Informações Importantes**

   * O vídeo é exibido em quadro (como no YouTube), apenas **play e ouvir**, sem opções de download.
   * Abaixo do vídeo há um card com textos curtos explicando a manutenção, melhorias, atualizações e novidades.

7. **Discord**

   * Botão para acessar o servidor do Discord, posicionado ao lado do login staff.
   * Destacado com cor do Discord e efeitos sutis de hover.

8. **Login Staff**

   * Funcionalidade opcional para staff entrar na CMS do hotel.
   * Depende da configuração do sistema CMS/Habbo.
   * Se a CMS for diferente, será necessário **adaptar o formulário e rotas** para funcionar corretamente.

9. **Fundo Dinâmico**

   * Muda automaticamente dependendo da hora do dia:

     * 06h00–09h00 → Amanhecer
     * 09h00–18h00 → Dia
     * 18h00–00h00 → Noite
     * 00h00–06h00 → Madrugada
   * Cria efeito realista e imersivo para o usuário.

10. **Responsividade e Estilo**

    * Todos os elementos se ajustam ao tamanho da tela.
    * Cards de novidades e informações têm altura limitada para não bagunçar a página.
    * Contagem centralizada e fotos nostálgicas posicionadas para não interferir em outros elementos.

---

### Observações Finais

* Todo o conteúdo textual, imagens e vídeos podem ser **substituídos ou atualizados** conforme necessário.
* A página funciona isoladamente, **não depende de CMS**, exceto pelo login staff.
* É totalmente **personalizável** para qualquer hotel, evento ou página de aviso de manutenção.
