# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# This file is the source Rails uses to define your schema when running `rails
# db:schema:load`. When creating a new database, `rails db:schema:load` tends to
# be faster and is potentially less error prone than running all of your
# migrations from scratch. Old migrations may fail to apply correctly if those
# migrations use external dependencies or application code.
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 2020_01_01_205248) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "rsupports", force: :cascade do |t|
    t.string "closed"
    t.boolean "open"
    t.string "description"
    t.text "recommendation"
    t.integer "support_id"
    t.integer "user_id"
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
  end

  create_table "supports", force: :cascade do |t|
    t.string "typeofsupport"
    t.string "servicetag"
    t.string "description"
    t.string "text"
    t.bigint "user_id", null: false
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
    t.string "station"
    t.index ["user_id"], name: "index_supports_on_user_id"
  end

  create_table "toners", primary_key: "requisitionnumber", force: :cascade do |t|
    t.string "username"
    t.string "tonername"
    t.integer "quantity"
    t.string "sectionname"
    t.string "stationname"
    t.datetime "requestdate"
    t.string "comment"
    t.datetime "issuedate"
    t.string "issuedby"
    t.string "issuecomment"
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
    t.integer "quantityissued"
  end

  create_table "users", force: :cascade do |t|
    t.string "email", default: "", null: false
    t.string "encrypted_password", default: "", null: false
    t.string "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
    t.boolean "admin", default: false
    t.string "station"
    t.index ["email"], name: "index_users_on_email", unique: true
    t.index ["reset_password_token"], name: "index_users_on_reset_password_token", unique: true
  end

  add_foreign_key "supports", "users"
end
