require "application_system_test_case"

class TonersTest < ApplicationSystemTestCase
  setup do
    @toner = toners(:one)
  end

  test "visiting the index" do
    visit toners_url
    assert_selector "h1", text: "Toners"
  end

  test "creating a Toner" do
    visit toners_url
    click_on "New Toner"

    fill_in "Comment", with: @toner.comment
    fill_in "Issuecomment", with: @toner.issuecomment
    fill_in "Issuedate", with: @toner.issuedate
    fill_in "Issuedby", with: @toner.issuedby
    fill_in "Quantity", with: @toner.quantity
    fill_in "Requestdate", with: @toner.requestdate
    fill_in "Requisitionnumber", with: @toner.requisitionnumber
    fill_in "Sectionname", with: @toner.sectionname
    fill_in "Stationname", with: @toner.stationname
    fill_in "Tonername", with: @toner.tonername
    fill_in "Username", with: @toner.username
    click_on "Create Toner"

    assert_text "Toner was successfully created"
    click_on "Back"
  end

  test "updating a Toner" do
    visit toners_url
    click_on "Edit", match: :first

    fill_in "Comment", with: @toner.comment
    fill_in "Issuecomment", with: @toner.issuecomment
    fill_in "Issuedate", with: @toner.issuedate
    fill_in "Issuedby", with: @toner.issuedby
    fill_in "Quantity", with: @toner.quantity
    fill_in "Requestdate", with: @toner.requestdate
    fill_in "Requisitionnumber", with: @toner.requisitionnumber
    fill_in "Sectionname", with: @toner.sectionname
    fill_in "Stationname", with: @toner.stationname
    fill_in "Tonername", with: @toner.tonername
    fill_in "Username", with: @toner.username
    click_on "Update Toner"

    assert_text "Toner was successfully updated"
    click_on "Back"
  end

  test "destroying a Toner" do
    visit toners_url
    page.accept_confirm do
      click_on "Destroy", match: :first
    end

    assert_text "Toner was successfully destroyed"
  end
end
