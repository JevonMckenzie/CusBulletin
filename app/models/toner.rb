class Toner < ApplicationRecord
	belongs_to :user, optional: true
	validates :username, :tonername, :quantity, :sectionname, :stationname, :requestdate, :presence => true
end
