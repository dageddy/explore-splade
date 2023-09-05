describe('Landing Page', () => {
  it('check layout elements', () => {
    cy.visit('http://127.0.0.1:8000')

    cy.contains('Bootstrap')
    cy.contains('DaisyUI')
    cy.contains('Flowbite')
    cy.contains('Preline')
  })
})

describe('Default Tab on Landing Page', () => {
  it('default active tab', () => {
    cy.visit('http://127.0.0.1:8000')

    cy.contains('h2', 'Home') // default Title
    cy.get('a').filter('[href="http://127.0.0.1:8000"]').contains('Home').should('have.class', 'border-b-2') // active tab
  })
})

describe('Navigate Tabs', () => {

  it('check bootstrap tabs', () => {

    cy.visit('http://127.0.0.1:8000')
    cy.contains('h2', 'Home') // default tab


    cy.get('a').filter('[href="http://127.0.0.1:8000/bootstrap"]').invoke('attr','href')
    .then((href) => {
      cy.visit(href)
      cy.contains('h2', 'Bootstrap')
      cy.get('a').filter('[href="http://127.0.0.1:8000/bootstrap"]').contains('Bootstrap').should('have.class', 'border-b-2') // active tab
    })

    // default should be tab 1
    cy.get('a').filter('[href="http://127.0.0.1:8000/tab/bs/1"]').contains('Tab1').should('have.class', 'active')
    cy.contains('div#myTabContent', 'hello from tab 1')


    cy.intercept('GET', '/tab/bs/*').as('tabrequest')

    Cypress._.times(3, (k) => {
      k++
      cy.get('a').filter("[href='http://127.0.0.1:8000/tab/bs/" + k + "']").contains('Tab' + k).click()
      cy.wait("@tabrequest").then(interception => {
        expect(interception.request.resourceType).to.eq("xhr")
        expect(interception.response.statusCode).to.eq(200)
      })
      cy.get('a').filter("[href='http://127.0.0.1:8000/tab/bs/" + k + "']").contains('Tab' + k).should('have.class', 'active')
      cy.contains('h2', 'Bootstrap')
      cy.contains('div#myTabContent', 'hello from tab ' + k)
      cy.get('a').filter('[href="http://127.0.0.1:8000/bootstrap"]').contains('Bootstrap').should('have.class', 'border-b-2') // parent active tab
    })


  })

})

describe('Recorded Tests', () => {

  it('some recording', () => {
    cy.visit('http://127.0.0.1:8000');
    /* ==== Generated with Cypress Studio ==== */
    cy.get('.hidden > [href="http://127.0.0.1:8000/daisyui"]').click();
    cy.get('.font-semibold').should('have.text', ' DaisyUI ');
    cy.get('[href="http://127.0.0.1:8000/tab/dui/2"]').click();
    cy.get('#myTabContent').should('have.text', ' hello from tab 2');
    cy.get('[href="http://127.0.0.1:8000/tab/dui/3"]').click();
    cy.get('.tab-active').should('have.class', 'tab-active');
    cy.get('[href="http://127.0.0.1:8000/tab/dui/1"]').click();
    cy.get('.tab-active').should('have.class', 'tab-active');
    /* ==== End Cypress Studio ==== */
  })

})