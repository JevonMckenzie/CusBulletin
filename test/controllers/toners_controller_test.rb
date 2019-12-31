require 'test_helper'

class TonersControllerTest < ActionDispatch::IntegrationTest
  setup do
    @toner = toners(:one)
  end

  test "should get index" do
    get toners_url
    assert_response :success
  end

  test "should get new" do
    get new_toner_url
    assert_response :success
  end

  test "should create toner" do
    assert_difference('Toner.count') do
      post toners_url, params: { toner: { comment: @toner.comment, issuecomment: @toner.issuecomment, issuedate: @toner.issuedate, issuedby: @toner.issuedby, quantity: @toner.quantity, requestdate: @toner.requestdate, requisitionnumber: @toner.requisitionnumber, sectionname: @toner.sectionname, stationname: @toner.stationname, tonername: @toner.tonername, username: @toner.username } }
    end

    assert_redirected_to toner_url(Toner.last)
  end

  test "should show toner" do
    get toner_url(@toner)
    assert_response :success
  end

  test "should get edit" do
    get edit_toner_url(@toner)
    assert_response :success
  end

  test "should update toner" do
    patch toner_url(@toner), params: { toner: { comment: @toner.comment, issuecomment: @toner.issuecomment, issuedate: @toner.issuedate, issuedby: @toner.issuedby, quantity: @toner.quantity, requestdate: @toner.requestdate, requisitionnumber: @toner.requisitionnumber, sectionname: @toner.sectionname, stationname: @toner.stationname, tonername: @toner.tonername, username: @toner.username } }
    assert_redirected_to toner_url(@toner)
  end

  test "should destroy toner" do
    assert_difference('Toner.count', -1) do
      delete toner_url(@toner)
    end

    assert_redirected_to toners_url
  end
end
